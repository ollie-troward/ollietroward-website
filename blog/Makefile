.PHONY: login

export NODE_TLS_REJECT_UNAUTHORIZED=0

build:
	hugo
deploy: build push
	firebase deploy --only hosting:blog-ollietroward
login:
	firebase login --reauth --no-localhost
serve:
	hugo server -D
push:
	git add .; \
	read -p "Commit Message:" message; \
	git commit -m "$$message"; \
	git push
