<?php require("../../includes/header.php"); ?><h1>The Black Riders</h1><div class="content">

<p><html> <body></body></html></p>
<h1 style="font-family: Arial;"><small>ACM International Collegiate     Programming Contest, Asia-Amritapuri Site, 2012</small></h1>
<h2>The Black Riders<br /> </h2>
<p> <i>'Hush!' said Frodo. 'I think I hear hoofs again.'<br />     They stopped suddenly and stood as silent as tree-shadows, listening. There was a sound of hoofs in the lane, some way behind, but coming slow and clear down the wind. Quickly and quietly they slipped off the path, and ran into the deeper shade under the oak-trees.<br />     The hoofs drew nearer. They had no time to find any hiding-place better than the general darkness under the trees.</i> <br /> - Frodo, Sam and Pippin, when they encounter a Black Rider.</p>
<p> Indeed, the Black Riders are in the Shire, and they are looking for the One Ring. There are <b>N</b> hobbits out in their fields, but when they hear the Riders approaching, or feel the fear cast by their presence, they immediately wish to run and hide in <b>M</b> holes located nearby.</p>
<p> Now, each hole has space for just 1 hobbit; however, once a hobbit reaches a hole, he is able to make room for one more hobbit by digging away at the earth. The time required to make enough space for a second hobbit is <b>C</b> units. Also, each hole CANNOT hold more than 2 hobbits, even after digging. Also note that a hobbit can begin making space for the next hobbit only after he reaches the hole.</p>
<p> You are given the time required to travel from each hobbit's current location to each hole. Find the minimum amount of time it will take before at least <b>K</b> of the hobbits are hiding safely.</p>
<p></p>
<h3>Input (STDIN):</h3>

<p> The first line contains <b>T</b>, the number of test cases.<br /> The first line of each test case contains 4 integers - <b>N</b> (no of hobbits), <b>M</b> (no of holes), <b>K</b> (minimum number of hobbits to hide) and <b>C</b> (time taken to expand a hole).<br /> The next <b>N</b> lines contain <b>M</b> integers each, denoting the time taken for each hobbit to each hole.</p>
<p></p>
<h3>Output (STDOUT):</h3>

<p> Output one line per test case which contains the minimum time. </p>
<p></p>
<h3>Constraints:</h3>

<p><b> 1 &lt;= T &lt;= 6<br /> 1 &lt;= N, M &lt;= 100<br /> 1 &lt;= K &lt;= min(N, 2 * M)<br /> 0 &lt; C &lt; 10,000,000<br /> 0 &lt; Time taken by the hobbits to the holes &lt; 10,000,000</b></p>
<p></p>
<h3>Sample Input:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 2<br /> 3 3 2 10<br /> 9 11 13<br /> 2 10 14<br /> 12 15 12<br /> 4 3 3 8<br /> 1 10 100<br /> 1 10 100<br /> 100 100 6<br /> 12 10 10<br /> </span></p>
<h3>Sample Output:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 10<br /> 9<br /> </span></p>
<h3>Notes/Explanation of Sample Input:</h3>

<p> For the first test case, there are 3 hobbits and 3 holes, and we need to get atleast 2 of them to safety. We can send the first hobbit to the first hole, and the second hobbit to the second hole, thereby taking 10 time units.<br /> For the second test case, we can make hobbit #1 reach hole 1 at time 1, hobbit #2 reach hole 1 at time 9 (by when hobbit #1 would have finished digging the hole), and hobbit #3 reach hole 3 at time 6.</p>
<p>  </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-01-2013</td>
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