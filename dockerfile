FROM node:fermium

ARG GITCOMMIT=""
ENV GIT_COMMIT_HASH=${GITCOMMIT}

WORKDIR /app

COPY dist/apps/api/flowaccount-workshop/. .

#RUN npm install

CMD ["node", "main.js"]

EXPOSE 8081
