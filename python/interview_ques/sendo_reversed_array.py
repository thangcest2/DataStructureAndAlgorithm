def find_min(arr):
    loop_cnt = 0
    min = 10**9
    for i in arr:
        loop_cnt += 1
        if i < min:
            min = i
    
    return min, loop_cnt

def find_min2(arr):
    loop_cnt = 0
    sorted_arr = []
    for i in range(len(arr)-1, -1, -1):
        loop_cnt += 1
        if arr[i-1] > arr[i]:
            return arr[i], loop_cnt

arr = [8,10,12,15,17,19,21,2,4,6]

print(find_min(arr))
print(find_min2(arr))