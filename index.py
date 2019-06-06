from flask import Flask, render_template
app = Flask(__name__)


@app.route('/')
def home():
    return render_template('index.html')


@app.route('/principal')
def principal():
    return render_template('principal.html')

@app.route('/estadisticas')
def estadisticas():
    return render_template('estadisticas.html')

if __name__ == '__main__':
    app.run(debug=True)


