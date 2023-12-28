import matplotlib.pyplot as plt
import numpy as np

x = np.arange(0, 10, 0.01)
y = np.sin(x)

plt.plot(x, y)
plt.savefig('files/file.png', dpi=300)