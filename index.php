app = require("express")();

const port = process.env.PORT || 80;
const users = ["katerina4cat", "Lunya"];

app.get("/validate", (req, res) => {
    const username = req.query.username || null

    if (username === null) {
        res.send(false);
        return;
    }
    for (const i in users)
        if (users[i] === username) {
            res.send(true);
            return;
        }

    res.send(false);
});

app.listen(port, () => console.log(`Сервер запущен, на порту ${port}`));
