from flask import Flask, render_template, request
from flask_mysqldb import MySQL

app = Flask(__name__)
app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = 'admin'
app.config['MYSQL_DB'] = 'flaskcontacts'

mysql = MySQL(app)


@app.route('/')
def home():
    return render_template('index.html')


@app.route('/principal')
def principal():
    return render_template('principal.html')


@app.route('/estadisticas')
def estadisticas():
    return render_template('estadisticas.html')


@app.route('/registro')
def registro():
    return render_template('registro.html')


@app.route('/add_contact', methods=['POST'])
def add_contact():
    if request.method == 'POST':
        fullname = request.form['fullname']
        phone = request.form['phone']
        email = request.form['email']
        print(fullname)
        print(phone)
        print(email)
        return 'Recivido'


if __name__ == '__main__':
    app.run(port=5000, debug=True)


# https://youtu.be/IgCfZkR8wME?t=1353
