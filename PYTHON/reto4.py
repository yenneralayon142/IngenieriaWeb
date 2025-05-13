"""
/*
 * Escribe un programa que se encargue de comprobar si un número es o no primo.
 * Hecho esto, imprime los números primos entre 1 y 100.
 */
"""

def primeNumber ():
    for i in range(1,100):
        if i % 1 == 0 and i % i == 0:
            print("El número es primo",i)
        else:
            print("El número no es primo",i)
primeNumber()