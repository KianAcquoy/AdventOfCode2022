import * as fs from 'fs';

function findChar(line, char) {
    for (let i = 0; i < line.length; i++) {
        if (line.substring(i, i + 1) == char) {
            return line.substring(i, i + 1);
        }
    }
    return false;
}

let totalcount = 0;
fs.readFile('input.txt', 'utf8', (err, data) => {
    data = data.split('\n');
    data.forEach((line,index) => {
        line = line.replace(/(\r)/, "");
        if ((index + 1) % 3 == 0) {
            for (let i = 0; i < line.length; i++) {
                let char = line.substring(i, i + 1);
                if (findChar(data[index - 1], char) && findChar(data[index - 2], char)) {
                    totalcount += char.charCodeAt(0) - (char == char.toUpperCase() ? 38 : 96);
                    break;
                }
            }
        }
    });
    console.log('Total group char count: ' + totalcount);
});