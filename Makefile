all:
	@mkdir -p /home/user42/Desktop/mariadb
	@mkdir -p /home/user42/Desktop/wordpress
	docker-compose -f srcs/docker-compose.yml up
	@printf 'Container is setting up..'

down:
	docker-compose -f srcs/docker-compose.yml down

clean: down
	@sudo rm -rf /home/user42/Desktop/mariadb/*
	@sudo rm -rf /home/user42/Desktop/wordpress/*

fclean: clean
	docker system prune -a -f

re: fclean all

.PHONY: clean fclean all re up down