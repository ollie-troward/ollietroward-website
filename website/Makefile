.PHONY: login

export NODE_TLS_REJECT_UNAUTHORIZED=0

deploy: push
	firebase deploy --only hosting:ollietroward-58537
login:
	firebase login --reauth --no-localhost
push:
	git add .; \
	read -p "Commit Message:" message; \
	git commit -m "$$message"; \
	git push
