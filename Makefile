all:
	@mkdir -p /home/user42/data
	@chmod 777 /home/user42/data
	@mkdir -p /home/user42/data/mariadb
	@mkdir -p /home/user42/data/wordpress
	sudo docker-compose -f srcs/docker-compose.yml up
	@printf 'Container is setting up..'

down:
	sudo docker-compose -f srcs/docker-compose.yml down

clean: down
	@sudo rm -rf /home/user42/data/mariadb/*
	@sudo rm -rf /home/user42/data/wordpress/*
	@sudo rm -rf /home/user42/data

fclean: clean
	sudo docker system prune -a -f

re: fclean all

.PHONY: clean fclean all re up down
