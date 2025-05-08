FROM php:8.3-apache

# 作業ディレクトリを設定
WORKDIR /var/www/html

# アプリケーションのソースコードをコンテナにコピー
COPY . /var/www/html/

# 必要なPHP拡張機能をインストール (例: MySQL, GD)
RUN docker-php-ext-install pdo pdo_mysql gd

# Apacheのmod_rewriteを有効化 (もし必要であれば)
RUN a2enmod rewrite

# ログローテーションの設定 (必要に応じて)
RUN apt-get update && apt-get install -y --no-install-recommends cron
RUN echo "* * * * * root /usr/sbin/apache2ctl restart" >> /etc/cron.d/apache-restart

# ApacheのDocumentRootを設定 (必要に応じて)
# <VirtualHost *:80>
#     DocumentRoot /var/www/html/public
#     <Directory /var/www/html/public/>
#         AllowOverride All
#     </Directory>
# </VirtualHost>
# RUN sed -i 's!DocumentRoot /var/www/html!DocumentRoot /var/www/html/public!g' /etc/apache2/sites-available/000-default.conf
# RUN sed -i 's!<Directory /var/www/html/>!<Directory /var/www/html/public/>!g' /etc/apache2/sites-available/000-default.conf

# コンテナ起動時のコマンド (Apacheをフォアグラウンドで実行)
CMD ["apache2-foreground"]

# ポートを公開
EXPOSE 80