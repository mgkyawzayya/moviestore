module.exports = {
    purge: ["./resources/views/**/*.blade.php", "./resources/css/**/*.css"],
    theme: {
        pagination: theme => ({
            color: theme("colors.pink.600")
        })
    },
    plugins: [
        require("@tailwindcss/ui"),
        require("tailwindcss-plugins/pagination")
    ]
};
