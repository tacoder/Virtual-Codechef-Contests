<?php require("../../includes/header.php"); ?><h1>Ingredients</h1><div class="content">
<p>
  You are given <b>n</b> cities with <b>m</b> bi-directional roads connecting them and the<br />
  length of each road. There are two friends living in different cities who wish<br />
  to collect some ingredients available at different stores to make cake. There<br />
  are s such stores. They need not come back home after purchasing the<br />
  ingredients. Petrol is expensive and they would hence like to travel minimum<br />
  total distance (sum of distance distance traveled by both kids). Help them<br />
  find out what this distance is.
  </p>
<h3>Input Format:</h3>
<p>
  <b>n m</b><br />
  (<b>m</b> lines of the form <b>a<sub>i</sub> b<sub>i</sub> c<sub>i</sub></b>)<br />
  Here <b>n</b> is number of cities, <b>m</b> is number of roads, <b>a<sub>i</sub></b> and <b>b<sub>i</sub></b> are the cities(0<br />
  indexed) the roads connect and <b>c<sub>i</sub></b> is the length of this road<br />
  <b>s</b> where <b>s</b> is the number of stores<br />
  (1 line containing <b>s</b> space separated integers indicating the city number in<br />
  which the stores are located.)<br />
  (two space separated integers indicating the cities in which the two kids<br />
  live)
  </p>
<h3>Output Format:</h3>
<p>
  Single integer <b>x</b> where <b>x</b> is the minimum distance that the duo will travel that<br />
  is minimum sum of distance travelled by first kid and second kid.
  </p>
<h3>Constraints:</h3>
<p><b><br />
  2 &le; n &le; 100<br />
  1 &le; m &le; (n*(n-1))/2<br />
  0 &le; a,b &lt; n<br />
  0 &le;c&le; 1000<br />
  1 &le; s &le; 8<br /></b>
  </p>
<h3>Sample Input:</h3>
<pre>
5 6
0 1 5
1 4 1
0 4 10
0 2 2
1 2 3
2 3 4
2
2 4
0 1</pre><h3>Sample Output:</h3>
<pre>
3</pre><p><br />
<b>Problem Setter: Vidit Gupta</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2014</td>
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