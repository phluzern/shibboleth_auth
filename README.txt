The following .htaccess rules must be added to htaccess file in typo3 root:
	AuthType Shibboleth
	Require Shibboleth
	
And if you have RealUrl Extension, the following must also be added to htaccess:
	RewriteRule ^("Shibboleth_Handler".*)/ - [L]
It must be the first RewriteRule in htaccess.
