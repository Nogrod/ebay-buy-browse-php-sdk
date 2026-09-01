#!/usr/bin/env python
r"""Browse API specific fixes for browse_api.json.

The bugs eBay ships in every spec are handled by ..\_tools\ebay_patch_spec.py,
which build.bat runs first. What is left here is specific to this API:

  * The filter and sort query parameters are declared as arrays of FilterField
    and SortField objects, but the API takes them as plain comma separated
    strings ("condition:{NEW},sellerAccountTypes:{BUSINESS}"). Serializing the
    objects would produce a query the API cannot read, so the item type is
    corrected to string -- which is also what the previous (YAML) spec used.

Idempotent -- re-run after every download.
"""

from __future__ import annotations

import collections
import json

SPEC = "browse_api.json"
STRING_QUERY_PARAMETERS = {"filter", "sort"}
METHODS = ("get", "post", "put", "delete", "patch")


def main() -> None:
    with open(SPEC, encoding="utf-8") as handle:
        spec = json.load(handle, object_pairs_hook=collections.OrderedDict)

    fixed = []
    for path, path_item in spec["paths"].items():
        for method, operation in path_item.items():
            if method not in METHODS:
                continue
            for parameter in operation.get("parameters", []):
                if parameter.get("name") not in STRING_QUERY_PARAMETERS or parameter.get("in") != "query":
                    continue
                items = (parameter.get("schema") or {}).get("items") or {}
                if "$ref" in items:
                    parameter["schema"]["items"] = {"type": "string"}
                    fixed.append(f"{operation.get('operationId', '?')}.{parameter['name']}")

    with open(SPEC, "w", encoding="utf-8", newline="\n") as handle:
        json.dump(spec, handle, indent=2, ensure_ascii=False)
        handle.write("\n")

    print(f"query parameters retyped to string: {', '.join(fixed) or 'none'}")


if __name__ == "__main__":
    main()
