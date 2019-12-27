deploy: build push
	firebase deploy --only hosting:blog-ollietroward
build:
	hugo -D
serve:
	hugo server -D
push:
	@read -p "Commit Message:" commit; \
	git add . \
	git commit -m "$$commit" \
	git push
