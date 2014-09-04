<?php require("../../includes/header.php"); ?><h1>Birthday Gift</h1><div class="content">

<p>It's our Chef's Birthday next week. His friends want to gift him something very nice and useful. They know how much Chef likes to go out on trips. So they decide to gift him a caravan i.e a <a href="http://en.wikipedia.org/wiki/Travel_trailer">travel trailer</a>. As is clear from the description, a caravan is towed behind a car. <br />
All the friends have chipped in a few dollars and now they have <i>D</i> dollars in total to buy a caravan. But there's one more thing they need to worry about. Caravans are sold outside their city. They will have to travel through various toll booths to buy one and bring it back. And they will have to pay some amount from their total <i>D</i> when they cross these toll booths. Luckily, they will not have to pay any toll for their own car(well, being Chef's friend has a lot of perks). But they will have to pay the toll for the caravan. They don't want to be spending too much on their tolls. Needless to say, they can't skip the toll booths.</p>
<p>There are <i>m</i> different roads between the Chef's city and the place where the caravans are sold. Each road takes a different route. There are <i>n</i> toll booths on every road. But an interesting observation is that the toll for a caravan need <b>not</b> be same for every road <i>AND</i> it also need <b>not</b> be same at every toll booth on the same road.</p>
<p>The friends want to gift him the most expensive caravan(which they can afford) and want to spend as little on tolls as they can. So <i>m</i> of the friends decide to travel on each of the roads individually. And once they buy a caravan, any one of them can start towing it behind his car. Also, a friend can move the caravan to some other friend's car i.e. to some other road. This is done so as to minimize the total toll. But there's another thing to be taken care of here. The caravan is not easy to move. So, there are mechanics available on every road who can do this. And there's a fixed amount they will charge to move the caravan from one road to another. This amount depends on the source and destination road between which the caravan is moved. But, there's a small restriction on the movement of the caravan. If the caravan has crossed the <i>i</i>th toll booth on a road, it can only be moved to a location before the (<i>i+1</i>)th booth on the other road. Initially, the caravan can be taken on any road.</p>
<p>Chef's friends will not want to buy an expensive caravan and find out later that they are out of money to pay for the toll. Nor do they want to end up buying a less expensive caravan and realize they could have bought a more expensive one. So they have collected all the details and want you to help them. Your task is to tell them the maximum amount they can spend on buying a caravan assuming they have D dollars initially and they have sufficient amount left to pay for the caravan toll.</p>
<h3>Input:</h3>
<p>First line of input contains T, number of tests.<br />
Each test begins with a line containing 3 space separated integers: D, n and m: total amount of money, the number of toll booths on every road and the number of roads respectively.<br />
Then follow m lines. Each line consists of n integers describing every road in order. The ith number in a line denotes the toll for the caravan at the ith toll booth on the respective road.<br />
Then follows an mxm matrix, C, where the jth number on the ith row i.e. C[i][j] signifies the cost of moving the caravan from the ith road to the jth road. Ofcourse, C[i][i]=0.</p>
<h3>Output:</h3>
<p>Output a single integer: the maximum amount they will be able to spend on a caravan. If they don't have enough money to pay for the toll, print "-1" instead.</p>
<h3>Constraints:</h3>
<p>1&lt;=T&lt;=30<br />
0&lt;=D&lt;=20000<br />
1&lt;=n,m&lt;=100  <br />
0&lt;=toll&lt;=200<br />
0&lt;=C[i][j]&lt;=100</p>
<p><b>Input:</b><br />
3<br />
40 5 4<br />
10 9 8 7 6<br />
8 7 6 9 12<br />
16 1 1 1 1<br />
7 6 5 4 3<br />
0 6 17 7<br />
8 0 19 2<br />
9 9 0 0<br />
12 4 18 0<br />
10 2 2<br />
5 6<br />
6 7<br />
0 0<br />
0 0<br />
12 3 2<br />
3 4 5<br />
5 7 2<br />
0 5<br />
2 0</p>
<p><b>Output:</b><br />
20<br />
-1<br />
0</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-07-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>