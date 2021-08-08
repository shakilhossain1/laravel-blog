import Alpine from 'alpinejs'
import search from './search';

window.Alpine = Alpine
window.algoliaAppId= 'SWSG3NPJEC'
window.algoliaApiKey = '3d335b430f426c8cab17ab0ad753be05'

Alpine.data('search', search);

Alpine.start()