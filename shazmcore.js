const axios = require('axios');

const options = {
  method: 'GET',
  url: 'https://shazam.p.rapidapi.com/shazam-events/list',
  params: {
    artistId: '73406786',
    l: 'en-US',
    from: '2022-12-31',
    limit: '50',
    offset: '0'
  },
  headers: {
    'X-RapidAPI-Key': 'ed29e065b8msh1e06915fcd01528p1e1bf3jsn5f43f79dcda8',
    'X-RapidAPI-Host': 'shazam.p.rapidapi.com'
  }
};

try {
	const response = await axios.request(options);
	console.log(response.data);
} catch (error) {
	console.error(error);
}