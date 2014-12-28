<?php require("../../includes/header.php"); ?><h1>BlindDate Contest</h1><div class="content">
<p>Academia University is hosting BitFest at GridLand, with participants from Academia (host) and other colleges (guest). The first event is a team coding event BlindDate, with each team containing one student from host and one from guest. <b>H</b> host participants and <b>G</b> guest participants have assembled in GridLand. All of them wish to participate in BlindDate.</p>
<p>GridLand is shaped as a <b>K&times;K</b> grid, and each grid point in the grid is specified by a pair of coordinates. The lowermost, leftmost grid point has coordinates (0,0) and therefore the rightmost, uppermost grid point has coordinates (<b>K, K</b>). The grid points are connected by roads that run north-south and east-west along the edges of the grid, so that he distance between two grid points (p,q) and (r,s) is the Manhattan distance between them (= |p-r| + |q-s|). Each participant initially stands on a grid point (more than one participant can stand on the same grid point) and the game will finally be played in the Arena which is located at the grid point (<b>K, K</b>).</p>
<p>Professor BitGuy is organizing BlindDate and he will decide the teams. Once the teams are formed, the host member moves to the guest member, picks him or her up, and they both move towards the Arena. A participant can be a member of only one team. Every host participant moves with a unit speed towards the designated guest member of her team along the roads, and both of them then move with unit speed to the arena along the roads.</p>
<p>Prof. BitGuy has to form the teams at time <i>t</i> = 0 in a manner such that the competition can start at a given positive integer time <b>C</b>. Assume that the team formation takes no time. What is the maximum number of teams BitGuy can form?</p>
<h3>Input</h3>
<p>The first line contains the number of test cases, <b>N</b> (0 &lt; <b>N</b> &le; 3).</p>
<p>For each test case, the first line contains the integers <b>H</b> (0 &lt; <b>H</b> &le; 250), <b>G</b> (0 &lt; <b>G</b> &le; 250), <b>K</b> (0 &lt; <b>K</b> &le; 1000) and <b>C</b>. The next <b>H</b> lines contain the x and y coordinates (in that order, separated by one or more spaces) of the host participants. The next <b>G</b> lines contain the x and y coordinates (in that order, separated by one or more spaces) of the guest participants. All coordinates are integers.</p>
<h3>Output</h3>
<p>For each test case, print the case number, followed by a colon, followed by a single space, followed by a single integer indicating the maximum number of teams that can be formed</p>
<h3>Sample Input</h3>
<pre>
2 
5 5 50 87 
1 2 
2 12 
3 22 
1 32 
2 42 
10 10 
10 12 
10 20 
20 33 
20 42 
3 4 20 28 
5 5 
6 7 
8 10 
17 1 
17 18 
18 18 
19 19
</pre><h3>Sample Output</h3>
<pre>
Case 1: 4
Case 2: 2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-12-2014</td>
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