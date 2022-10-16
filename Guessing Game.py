import random

s1 = """ Welcome to the Guessing game.
       You need to guess the number which the computer is thinking.
       The number can be 0 to 99 (including both these numbers)
"""

print (s1)

x = random.randint(0,99)
print (x)

all_guesses= 0
all_guess= []
for  all_guesses in range(0,5):
    my_guess = int(input("Enter your guess:"))
    all_guesses += 1
    all_guess.append(my_guess)
    if my_guess == x:

        print("Congrats!!! Your guess {} is correct".format(my_guess))
        break
    elif my_guess < x:
        print("Your guess is low. Please enter a higher number")
    else:
        print("You guess is higher. Please enter a lower number")
if my_guess == x:
    print("You reached the correct guess in {} tries".format(all_guesses))
else:
    print("Oooopss!!!! You didn't guessed the right number")
    print("The right number was",x)

print("Numbers you guessed were:",all_guess)
    print ("Try again later")