FROM node:18

WORKDIR /app

COPY package.json package-lock.json ./
RUN npm install

COPY . .

EXPOSE 8000
EXPOSE 5173

CMD ["npm", "run", "dev"]