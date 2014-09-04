<?php require("../../includes/header.php"); ?><h1>Movie Festival</h1><div class="content">
<h2>Movie Festival</h2>
<p>
 	This weekend Gopal is going for a movie festival and he wants to watch exactly 3 movies. Gopal should spend Rs. <b>C<sub>i</sub></b> to watch <b>i th</b> movie. Now he got only Rs. <b>K</b> and he wants to spend that optimally. Gopal want to know in how many ways he can select 3 movies such that they cost exactly Rs. <b>K</b> in total. Two ways are considered same if the same set of movies are chosen in different order.   </p>
<h3>Input</h3>
<p>
 First line contains <b>T</b>, number of test cases.<br />
 First line each test case contains two space separated integers <b>N</b> and <b>K</b>, Total number of movies that will be screened in the<br />
 festival and amount of money that Gopal has.<br />
In next <b>2N</b> lines, <b>2 * i - 1 th</b> line contains name of the movie <b>S<sub>i</sub></b>, and <b>2 * i  th</b> line contains an integer <b>C<sub>i</sub></b>, money to be spent for watching <b>i th</b> movie.
 </p>
<h3>Output</h3>
<p>For each test case output single line containing the solution as single integer.
</p><p><b>Note</b> </p>
<ul>
<li>Name of the movie contains only Upper-case and Lower-case English letter and spaces.</li>
<li>You can consider that name of a movie will be unique.</li>
</ul>

<h3>Constrains</h3>
<p><ul>
<li>1 &lt;= T &lt;= 10</li>
<li>3 &lt;= N &lt;= 5*10<sup>2</sup></li>
<li>0 &lt;= K &lt;= 10<sup>3</sup></li>
<li>1 &lt;= |S<sub>i</sub>| &lt;= 50</li>
<li>0 &lt;= C<sub>i</sub> &lt;= 100</li>
</ul>
</p>
<h3>Sample Input</h3>
<pre>
1
3 90
Dhoom Three
30
Ra One
10
Nayak
50
</pre><h3>Sample Output</h3>
<pre> 
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/hkbharath">hkbharath</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-02-2014</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, PAS fpc, PAS gpc, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>