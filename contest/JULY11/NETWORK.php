<?php require("../../includes/header.php"); ?><h1>Wireless Network</h1><div class="content">

<p>A wireless network has been built consisting of many wireless access points for computers.<br />
Each access point can support a certain number of computers, and the network will perform better<br />
when computers are close to the access points supporting them.<br />
Specifically, the greatest distance between any computer and its access point determines the<br />
strength of the network.<br />
A network has recently been designed that will automatically reconfigure itself every time a computer<br />
is added so that the greatest distance will be as small as possible.<br />
Your task is to compute, as each computer is added to the network, this distance.</p>
<p>Consider the following example:<br />
There are 2 access points, at (5,5) and (6,9), each of which can support 2 computers.<br />
The first computer to be added to the wireless network is at (3,5).<br />
This computer connects to the access point at (5,5), which is only a distance of 2 away.<br />
The next computer to be added is at (5,2).<br />
This computer also connects to the access point at (5,5), and the greatest distance is now 3.<br />
A third computer is added at (4,2).<br />
This computer cannot connect to the (5,5) access point because it has already reached its limit.<br />
But connecting to (6,9) is not a good choice either because its so far away.<br />
Instead, the network reassigns the (3,5) computer to the (6,9) access point so that the new computer<br />
can connect to the (5,5) access point.<br />
The greatest distance is now from the (3,5) computer to the (6,9) access point, which is 5.<br />
(Note: in the picture below, the top-left corner is (0,0)).</p>
<p><img src='http://www.codechef.com/download/july11-network.gif' /></p>
<h3>Input</h3>
<p>Input begins with an integer T, the number of test cases to follow.<br />
Each test case begins with a line containing 2 integers, S (the number of access points)<br />
and C (the number of computers).  S+C lines follow.  The first S lines contain 3 integers each,<br />
giving the coordinates of an access point, followed by the number of connections it can support.<br />
The next C lines contain 2 integers each, giving the coordinates of a computer.<br />
There is a blank line before each test case.</p>
<h3>Output</h3>
<p>For each test case, output C lines, where the i'th line contains the greatest distance<br />
in the network after the first i computers have been added to the network, rounded to 3 decimal places.<br />
Output a blank line after each test case.</p>
<h3>Sample Input</h3>
<pre>3

2 3
5 5 2
6 9 2
3 5
5 2
4 2

2 4
3 6 2
10 9 2
2 5
3 8
4 3
6 4

2 1
10 5 1
6 8 1
3 3</pre><h3>Sample Output</h3>
<pre>2.000
3.000
5.000

1.414
2.000
7.071
7.071

5.831</pre><h3>Constraints</h3>
<p>T is between 1 and 15, inclusive.<br />
S is between 1 and 30, inclusive.<br />
Each access point supports between 1 and 30 connections, inclusive.<br />
C is between 1 and the total number of supported connections, inclusive.<br />
All coordinates comprise integers between 0 and 10000, inclusive.<br />
All coordinates are distinct.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-04-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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