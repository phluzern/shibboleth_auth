shibboleth_auth
===============

Fork of the TYPO3 extension shibboleth_auth to fix TYPO3 CMS 6.0+ issues.

The following .htaccess rules must be added to htaccess file in typo3 root:

    AuthType Shibboleth
    Require Shibboleth

And if you have RealUrl Extension, the following must also be added to htaccess:

    <IfModule mod_shib>
    	RewriteRule ^(Shibhandler.*)/ - [L]
    	RewriteRule ^(Shibboleth.sso)/ - [L]
    </IfModule>

It must be the first RewriteRule in htaccess.
