FROM node:fermium

ARG GITCOMMIT=""
ENV GIT_COMMIT_HASH=${GITCOMMIT}

WORKDIR /app

COPY . .

RUN npm install

CMD ["node", "main.js"]

EXPOSE 8081
