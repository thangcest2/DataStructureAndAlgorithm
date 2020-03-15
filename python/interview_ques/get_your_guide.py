# you can write to stdout for debugging purposes, e.g.
# print("this is a debug message")


def _find_free_phone_number(phones):
    longest_duration = -1
    for phone, duration in phones.items():
        if duration > longest_duration:
            longest_duration = duration

    same_longest_phones = [k for k, v in phones.items() if v == longest_duration]
    if len(same_longest_phones) == 1:
        return same_longest_phones[0]

    smallest_numerical_phone = same_longest_phones[0]
    for phone in same_longest_phones[1:]:
        if phone < smallest_numerical_phone:
            smallest_numerical_phone = phone

    return smallest_numerical_phone


def solution(S):
    # write your code in Python 3.6
    lines = S.split("\n")
    duration_keyby_phone_numbers = {}
    keyby_phone_numbers = {}

    for line in lines:
        duration, phone_number = line.split(',')
        d_hours, d_minutes, d_seconds = map(int, duration.split(':'))
        d_total_seconds = d_hours * 3600 + d_minutes * 60 + d_seconds
        keyby_phone_numbers[phone_number] = d_total_seconds

        if phone_number not in duration_keyby_phone_numbers:
            duration_keyby_phone_numbers[phone_number] = d_total_seconds
        else:
            duration_keyby_phone_numbers[phone_number] += d_total_seconds

    free_phone_number = _find_free_phone_number(duration_keyby_phone_numbers)
    duration_keyby_phone_numbers.pop(free_phone_number)

    cost = 0
    for phone, d_total_seconds in keyby_phone_numbers.items():
        if d_total_seconds < 300:
            cost += 3 * d_total_seconds
        else:
            minutes = d_total_seconds // 60 + 1 if d_total_seconds % 60 else 0
            cost += 150 * minutes

    return cost



