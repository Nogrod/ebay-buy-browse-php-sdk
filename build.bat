rem openapi request body missing
java -jar openapi-generator-cli-7.6.0.jar generate -i buy_browse_v1_oas3.yaml -g php-nextgen --git-user-id nogrod --git-repo-id ebay-buy-browse-php-sdk --artifact-version 0.0.1 --enable-post-process-file --additional-properties invokerPackage=eBay\Buy\Browse
