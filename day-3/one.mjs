import * as fs from 'fs';

fs.readFile('input.txt', 'utf8', (err, data) => {
    let list = data.split('\n');
    let score = 0;
    list.forEach(line => {
        line = line.replace(/(\r)/, "")
        let doubles = [];
        for (let i = line.length / 2; i < line.length; i++) {
            if (line.substring(line.length / 2, -1).split('').includes(line[i]) && !doubles.includes(line[i])) {
                doubles.push(line[i]);
                score += line[i].charCodeAt(0) - (line[i] == line[i].toUpperCase() ? 38 : 96);
            }
        }
    });
    console.log('Total score: ' + score);
});