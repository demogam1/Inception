all:
	sudo docker-compose up --build
clean:
	sudo docker system -y prune 
