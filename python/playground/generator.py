def flatten(nested):
    try:
        try: nested + ''
        except TypeError: 
            print('mai') 
            pass
        else:
            print('thang') 
            raise TypeError

        for sublist in nested:
            for element in flatten(sublist):
                yield element
        
    except TypeError:
        print(nested)
        # yield nested
    finally:
        yield nested

a = list(flatten(['foo', ['bar', ['zz']], ['12', '1', 3]]))
print(a)