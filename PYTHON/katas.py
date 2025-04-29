def scratch(lottery):
    total = 0
    for i in lottery:
        card = i.split()
        if card[0] == card[1] == card[2]:
            total += int(card[3])
    return total
print(scratch(["tiger tiger tiger 100","rabbit dragon snake 100","rat ox pig 1000","dog cock sheep 10","horse monkey rat 5","dog dog dog 1000"]))

def powers(n):
    result = []
    num = 1
    while n > 0:
        if n % 2 == 1:
            result.append(num)
        num *=2
        n //=2
    return result
print(powers(10))

def better_than_average(class_points,your_points):
    sumArray = sum(class_points,your_points)
    media = len(class_points)
    total = sumArray / media
    if(total <= your_points ):
        return True
    else:
        return False
print(better_than_average([100, 40, 34, 57, 29, 72, 57, 88],75))


def spread(func,args):
    return func(*args)
print(spread(lambda x,y: x+y , [1,2]))