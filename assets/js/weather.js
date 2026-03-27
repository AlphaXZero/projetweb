class Weather {
    constructor(lat, lon, containerId) {
        this.lat = lat;
        this.lon = lon;
        this.container = document.getElementById(containerId);
    }

    async fetch() {
        const url = `https://api.open-meteo.com/v1/forecast?latitude=${this.lat}&longitude=${this.lon}&current=temperature_2m,weathercode,windspeed_10m&wind_speed_unit=kmh`;

        const response = await fetch(url);
        const data = await response.json();
        return data.current;
    }

    getWeatherLabel(code) {
        if (code === 0) return 'Clear sky';
        if (code <= 3) return 'Partly cloudy';
        if (code <= 48) return 'Foggy';
        if (code <= 67) return 'Rainy';
        if (code <= 77) return 'Snowy';
        if (code <= 82) return 'Showers';
        return 'Stormy';
    }

    async render() {
        try {
            const current = await this.fetch();
            const label = this.getWeatherLabel(current.weathercode);

            this.container.innerHTML = `
                <p class="weather-temp">${current.temperature_2m}°C</p>
                <p class="weather-label">${label}</p>
                <p class="weather-wind">Wind: ${current.windspeed_10m} km/h</p>
            `;
        } catch (e) {
            this.container.innerHTML = '<p>Weather unavailable.</p>';
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const weather = new Weather(50.4108, 4.4446, 'weather-widget');
    weather.render();
});