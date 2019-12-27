deploy: build push
	firebase deploy --only hosting:blog-ollietroward
build:
	hugo -D
serve:
	hugo server -D
push:
	git add .
	git commit -m "$$MESSAGE"
	git push
