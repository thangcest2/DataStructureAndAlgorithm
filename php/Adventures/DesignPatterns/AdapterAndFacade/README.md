###Docs for AdapterAndFacade

######Adapter: 
Converts the interface of a class into another interface that clients, Let class work together that couldn’t otherwise because of incompatible interfaces.

######Facade: Principle of Least Knowledge (Law of Demeter)
-> Prevent to reach into an object to gain access to third object’s methods

This is bad: 
```
public House { 
    WeatherStation station;
    public float getTemp() {
        return station.getThermometer().getTemperature();
    } 
}

```

Shoud be:
```
public House { 
    WeatherStation station;
    public float getTemp() {
        Thermometer thermometer = station.getThermometer(); 
        return getTempHelper(thermometer);
    }
    public float getTempHelper(Thermometer thermometer) { 
        return thermometer.getTemperature();
    } 
}

```

