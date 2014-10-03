<?php require("../../includes/header.php"); ?><h1>Powerhouses Again</h1><div class="content">
<p>
A country has N cities with certain population in each city. These cities are internally connected by two-way power cables. Among them, K cities have powerhouses. If a powerhouse is in a city, or is connected to another city via cables, directly or indirectly, you can provide electricity to that city, if you own the powerhouse. </p>
<p>Initially X (X≤K) of the powerhouses are owned by you. Each powerhouse costs something, and the cost is given to you. You can sell any power house that you own, at the cost of the powerhouse. You can buy a powerhouse which you don’t yet own, at it’s mentioned cost, if you have enough money.</p>
<p>In your bank account you have some money, say M (apart from the powerhouses you own). </p>
<p>You want to satisfy maximum number of people, by buying and selling appropriate powerhouses. Find the maximum number of people that can be satisfied.</p>
<h3>Input</h3>
<ul>
<li>
First line of the input contains three space separated integers N , E and K. N represents number of cities, E denotes the number of connections and K represents number of cities having powerhouses.
</li></ul>
<ul>
<li>
Next E lines each contains two integers u and v representing that there is a connection between city u and city v. There won’t be any duplicate connection. u won’t be equal to v.
</li></ul>
<ul>
<li>
Next line contains N space separated integers denoting the population of each city.
</li></ul>
<ul>
<li>
Next line contains K space separated integers. Each integers denote a city containing powerhouse. All K cities will be distinct and valid. Powerhouses are numbered from 1 to K (in the order in which they are provided).
</li></ul>
<ul>
<li>
Next line contains K space separated integers denoting the cost of the corresponding powerhouse (ith integer denotes the cost of the ith powerhouse).
</li></ul>
<ul>
<li>
Next line contains two integers X and M. X represents number of powerhouses that you own and M represents the amount of money that you have in your bank account.
</li></ul>
<ul>
<li>
Next line contains X space separated integers denoting which of the X powerhouses among the given K powerhouses you own. Integer X_i means you  own X_i th powerhouse.
</li></ul>
<h3>Output</h3>
<p>
One integer in a single line denoting the maximum number of people that you can satisfy.
</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ N ≤ 100000</li>
<li>1 ≤ u, v ≤ N</li>
<li>1 ≤ E ≤ 200000</li>
<li>1 ≤ K ≤ 31</li>
<li> 1≤ X ≤ K </li>
<li> 1 ≤ X_i ≤ K </li>
<li>Population of each city will be less than or equal to 1000000</li>
<li>Cost of a powerhouse will be less than or equal to 1000000000.</li>
<li>0 ≤ M ≤ 32000000000</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
6 6 2
1 2 
1 3
1 4
2 4
3 4
5 6
5 3 11 7 2 18
4 5
115 100
1 14
2
<b>Output:</b>
20
</pre><h3> Explanation </h3>
<ul>
<li> There are 6 cities numbered from 1 to 6 having population at the cities 5, 3, 11, 7, 2 and 18 respectively.
</li><li> 2 cities, city 4 and city 5 contains powerhouse. Cost of the powerhouse located at city 4 is 115 and cost of the powerhouse located at city 5 is 100.
</li><li> Powerhouses are numbered. Meaning 1st powerhouse corresponds to powerhouse located at city 4 and 2nd powerhouse corresponds to the powerhouse located at city 5.
</li><li> You own one of the powerhouses and have additional balance of 100 in your bank account.
</li><li> 2 in the next line means you own the 2nd powerhouse (i.e., powerhouse located at city 5 having cost 100).
</li><li> Since you already own powerhouse 2 and you do not have suffcient balance to buy powerhouse 1 (because it costs 115 but you have only 14 in your account. You can not buy that powerhouse even if you sell the powerhouse that you own. Because that will fetch you only 100 more so you will have total of 114 which is not enough to buy the first poerhouse).
</li><li> Since the 2nd poerhouse, that you own, is connected to city 5 and city 6 you can satisfy atmost 2 + 18 = 20 people.
</li></ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-09-2014</td>
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
    </table><?php require("../../includes/footer.php"); ?>