default:
	mv /usr/local/etc/openssl/cert.pem /usr/local/etc/openssl/cert.pem.old && gem install jekyll-sitemap jekyll-mentions jemoji jekyll-paginate

serve:
	jekyll serve