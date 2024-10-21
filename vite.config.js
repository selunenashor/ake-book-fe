import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

import { glob } from "glob";
import path from "node:path";
import { fileURLToPath } from "node:url";

const input = Object.fromEntries(
    glob
        .sync("resources/js/**/*.js")
        .map((file) => [
            path.relative(
                "resources/js",
                file.slice(0, file.length - path.extname(file).length)
            ),
            fileURLToPath(new URL(file, import.meta.url)),
        ])
);

const input2 = Object.fromEntries(
    glob
        .sync("resources/scss/**/*.scss")
        .map((file) => [
            path.relative(
                "resources/scss",
                file.slice(0, file.length - path.extname(file).length)
            ),
            fileURLToPath(new URL(file, import.meta.url)),
        ])
);
const mergedInput = Object.assign({}, input, input2);

console.log(mergedInput);

export default defineConfig({
    plugins: [
        laravel({
            input: mergedInput,
            refresh: true,
        }),
    ],
});
