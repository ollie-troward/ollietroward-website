deploy: build push
	firebase deploy --only hosting:blog-ollietroward
build:
	hugo -D
serve:
	hugo server -D
push:
	git add .; \
	read -p "Commit Message:" message; \
	git commit -m "$$message";