import requests
import configparser
from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def weather_dashboard():
    return render_template('index.html')

@app.route('/loginpage.php')
def login():
    return render_template('loginpage.php')

@app.route('/home.php')
def home1():
    return render_template('home.php')

@app.route('/homePro.php')
def homepro():
    return render_template('homePro.php')

@app.route('/login.html', methods=['GET', 'POST'])
def adminlogin():
    return render_template('login.html')

@app.route('/admin.php', methods=['GET', 'POST'])
def admindet():
    return render_template('admin.php')

@app.route('/login.php')
def loginphp():
    return render_template('login.php')

@app.route('/session.php')
def session():
    return render_template('session.php')

@app.route('/verify.php', methods=['GET', 'POST'])
def verify():
    return render_template('verify.php')

@app.route('/tyregister.php', methods=['GET', 'POST'])
def tyregister():
    return render_template('tyregister.php')

@app.route('/contact.html')
def contact():
    return render_template('contact.html')

@app.route('/index.html')
def home():
    return render_template('index.html')

@app.route('/logout.php')
def logout():
    return render_template('logout.php')

@app.route('/user-registration.html')
def registration():
    return render_template('user-registration.html')

@app.route('/results', methods=['POST'])

def render_results():
    api_key = get_api_key()

    city = request.form['city']
    data = get_weather_results(city, api_key)

    temp = "{0:.2f}".format(data["main"]["temp"])
    feels_like = "{0:.2f}".format(data["main"]["feels_like"])
    weather = data["weather"][0]["main"]
    location = data["name"]

    return render_template('results.php',location=location, temp=temp,feels_like=feels_like, weather=weather)
    
@app.route('/resultsPro', methods=['POST'])
def render_resultsPro():
    api_key = get_api_key()
    
    city = request.form['city']
    data = get_weather_results(city, api_key)

    temp = "{0:.2f}".format(data["main"]["temp"])
    feels_like = "{0:.2f}".format(data["main"]["feels_like"])
    weather = data["weather"][0]["main"]
    location = data["name"]

    lat=request.form['lattitude']
    lon=request.form['longitude']
    airPollution = get_air_pollution(lat,lon,api_key)


    lattitude =airPollution["coord"]["lat"]
    longitude =airPollution["coord"]["lon"]
    var_no=airPollution["list"][0]["components"]["no"]
    var_co=airPollution["list"][0]["components"]["co"]
    var_no2=airPollution["list"][0]["components"]["no2"]
    var_o3=airPollution["list"][0]["components"]["o3"]
    var_so2=airPollution["list"][0]["components"]["so2"]
    var_pm2_5=airPollution["list"][0]["components"]["pm2_5"]
    var_pm10=airPollution["list"][0]["components"]["pm10"]
    var_nh3=airPollution["list"][0]["components"]["nh3"]
    return render_template('resultsPro.php',location=location,temp=temp,feels_like=feels_like,weather=weather,lat=lattitude,lon=longitude,var_no=var_no,var_co=var_co,var_no2=var_no2,var_o3=var_o3,var_so2=var_so2,var_pm2_5=var_pm2_5,var_pm10=var_pm10,var_nh3=var_nh3)


def get_api_key():
    config = configparser.ConfigParser()
    config.read('config.ini')
    return config['openweathermap']['api']


def get_weather_results(city, api_key):
    api_url = "http://api.openweathermap.org/data/2.5/weather?q={}&appid={}".format(city, api_key)
    r = requests.get(api_url)
    return r.json()


def get_air_pollution(lat,lon,apiKey):
    apiUrl="http://api.openweathermap.org/data/2.5/air_pollution/forecast?lat={}&lon={}&appid={}".format(lat,lon,apiKey)
    r=requests.get(apiUrl)
    return r.json()



if __name__ == '__main__':
    app.run(host='0.0.0.0')
