<VirtualHost *:8100>
 DocumentRoot "/Users/olaktion/PHP_BAS/day03/ex00"
 <Directory "/Users/olaktion/PHP_BAS/day03/ex00">
  AllowOverride All
  Require all granted
  Allow from all
 </Directory>
</VirtualHost>