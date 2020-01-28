.PHONY: login

export NODE_TLS_REJECT_UNAUTHORIZED=0

build:
	hugo
deploy: build push
	firebase deploy --only hosting:blog-ollietroward
login:
	firebase login --reauth --no-localhost
post:
	read -p "Post Name:" message; \
	hugo new posts/"$$message".md
push:
	git add .; \
	read -p "Commit Message:" message; \
	git commit -m "$$message"; \
	git push
serve:
	hugo server -D
