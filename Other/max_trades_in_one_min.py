"""
Input
09:30:01.034,	36.99,	100,	V
09:30:55.000,	37.08,	205,	V
09:30:55.554,	36.90,	54,		V
09:30:55.556,	36.91,	99,		D

09:31:01.033,	36.94,	100,	D
09:31:01.034,	36.95,	900,	V

Output
2
3

В приведенном примере четыре сделки были совершены на бирже "V “и две сделки были совершены на бирже ”D".
Не все”V “-сделки помещаются в одно минутное окно, поэтому ответ на” V " -три.

In the example four trades were executed on exchange “V” and two trades were executed on exchange “D”.
Not all of the “V”-trades fit in one minute-window, so the answer for “V” is three.
"""
trade_dict = {}
num_line_counter = 0
with open('max_trades_in_one_min.csv', 'r') as file:
    for line in file:
        line = line.strip('\xef\xbb\xbf\r\n ')
        trade_time, price, size, exchange = line.split(',')

        print(line)
        trade_hour, trade_min, trade_sec = trade_time.split(':')
        print(f'trade_hour = {trade_hour}, trade_min = {trade_min}, trade_sec = {trade_sec}')
        trade_delta = int(trade_hour) * 24 + int(trade_min) * 60 + float(trade_sec)
        print('trade_delta = ', trade_delta)

        if num_line_counter == 0:
            trade_delta_1 == trade_delta

        if trade_delta - trade_delta_1 < 1:
            trade_dict[exchange] += 1

        else:


        num_line_counter += 1

        exchange_exist = False
        for key in trade_dict.keys():
            if key == exchange:
                exchange_exist = True
            else:
                exchange_exist = False
        if not exchange_exist:
            trade_dict[exchange] = trade_delta
        print(trade_dict)

print('==========================')

X = []
with open('max_trades_in_one_min.csv', 'r') as tr:
    for line in tr:
        line = line.strip('\xef\xbb\xbf\r\n ')
        X.append(line.split(','))
print(X)
dex = {}
for item in X:
    dex[item[3]] = []
print(dex)
for item in X:
    dex[item[3]].append(float(item[0][:2])*60.+float(item[0][3:5])+float(item[0][6:8])/60.+float(item[0][9:])/60000.)
print(dex)
for item in dex:
    count = 1
    ccount = 1
    if dex[item][len(dex[item])-1]-dex[item][0] <1:
        count = len(dex[item])
    else:
        for t in range(len(dex[item])-1):
            for tt in range(len(dex[item])-t-1):
                if dex[item][tt+t+1]-dex[item][t] <1:
                    ccount += 1
                else: break
            if ccount>count:
                count=ccount
            ccount=1
    print(count)
