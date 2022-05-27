function reverseArray(arr) {
  const res = [];
  for (let i = arr.length - 1; i >= 0; --i) {
    res.push(arr[i]);
  }
  return res;
}

console.log(reverseArray(["Apple", "Banana", "Orange", "Coconut"]));
