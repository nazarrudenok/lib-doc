import requests

class rus_total:
    def get_item(self, item):
        url = 'https://russianwarship.rip/api/v2/statistics/latest'
        r = requests.get(url).json()

        stats = r['data']['stats']
        if item == 'personnel':
            return stats['personnel_units']
        elif item == 'tanks':
            return stats['tanks']
        elif item == 'afv':
            return stats['armoured_fighting_vehicles']
        elif item == 'artillery':
            return stats['artillery_systems']
        elif item == 'mlrs':
            return stats['mlrs']
        elif item == 'aa_systems':
            return stats['aa_warfare_systems']
        elif item == 'planes':
            return stats['planes']
        elif item == 'helicopters':
            return stats['helicopters']
        elif item == 'vehicles':
            return stats['vehicles_fuel_tanks']
        elif item == 'warships':
            return stats['warships_cutters']
        elif item == 'cruise_missiles':
            return stats['cruise_missiles']
        elif item == 'uav':
            return stats['uav_systems']
        elif item == 'special_equip':
            return stats['special_military_equip']
        elif item == 'atgm_srbm_systems':
            return stats['atgm_srbm_systems']
        else:
            _error = 'Error: Invalid argument'
            return _error
        
class rus_quantity:
    def get_item(self, item):
        url = 'https://russianwarship.rip/api/v2/statistics/latest'
        r = requests.get(url).json()

        stats = r['data']['increase']
        if item == 'personnel':
            return stats['personnel_units']
        elif item == 'tanks':
            return stats['tanks']
        elif item == 'afv':
            return stats['armoured_fighting_vehicles']
        elif item == 'artillery':
            return stats['artillery_systems']
        elif item == 'mlrs':
            return stats['mlrs']
        elif item == 'aa_systems':
            return stats['aa_warfare_systems']
        elif item == 'planes':
            return stats['planes']
        elif item == 'helicopters':
            return stats['helicopters']
        elif item == 'vehicles':
            return stats['vehicles_fuel_tanks']
        elif item == 'warships':
            return stats['warships_cutters']
        elif item == 'cruise_missiles':
            return stats['cruise_missiles']
        elif item == 'uav':
            return stats['uav_systems']
        elif item == 'special_equip':
            return stats['special_military_equip']
        elif item == 'atgm_srbm_systems':
            return stats['atgm_srbm_systems']
        else:
            _error = 'Error: Invalid argument'
            return _error
        
class rus_date:
    def get_item(self, item, date):
        url = f'https://russianwarship.rip/api/v2/statistics/{date}'
        r = requests.get(url)
        
        if r.status_code == 200:
            r = requests.get(url).json()
            stats = r['data']['stats']
            if item == 'personnel':
                return stats['personnel_units']
            elif item == 'tanks':
                return stats['tanks']
            elif item == 'afv':
                return stats['armoured_fighting_vehicles']
            elif item == 'artillery':
                return stats['artillery_systems']
            elif item == 'mlrs':
                return stats['mlrs']
            elif item == 'aa_systems':
                return stats['aa_warfare_systems']
            elif item == 'planes':
                return stats['planes']
            elif item == 'helicopters':
                return stats['helicopters']
            elif item == 'vehicles':
                return stats['vehicles_fuel_tanks']
            elif item == 'warships':
                return stats['warships_cutters']
            elif item == 'cruise_missiles':
                return stats['cruise_missiles']
            elif item == 'uav':
                return stats['uav_systems']
            elif item == 'special_equip':
                return stats['special_military_equip']
            elif item == 'atgm_srbm_systems':
                return stats['atgm_srbm_systems']
            else:
                _error = 'Error: Invalid argument'
                return _error
        else:
            return 'Error: Invalid date'