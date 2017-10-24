# SLPEs' Financial Data Collection Portal and Exporter

This program was made for the Department of Planning, Statistics and Programme Management, Government of West Bengal, India under Birla Institiute of Technology and Science, Pilani's Practice School 1 programme.

The [form](page0.php) is meant to collect financial data from the various State Level Public Sector Enterprises (SLPEs) operating in West Bengal and collate the same into an SQL database. 

The Python script [generator.py](./Generator/generator.py) exports the data in the SQL database into a set of .xlsx worksheets ready for printing in the statistical handbook published by the department.

The form was hosted on a local machine using [XAMPP](https://www.apachefriends.org/), later to be shifted to a government server. The script uses [openpyxl](https://openpyxl.readthedocs.io/), and was converted to a .exe file using [py2exe](http://www.py2exe.org) for in-office use and circulation.
