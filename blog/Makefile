.PHONY: login

build:
	hugo -D
deploy: build push
	firebase deploy --only hosting:blog-ollietroward
login:
	NODE_TLS_REJECT_UNAUTHORIZED=0 \
    firebase login --reauth --no-localhost
serve:
	hugo server -D
push:
	git add .; \
	read -p "Commit Message:" message; \
	git commit -m "$$message"; \
	git push
