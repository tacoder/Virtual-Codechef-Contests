<?php require("../../includes/header.php"); ?><h1>The Escape</h1><div class="content">
<p> </p>
<p>There is a war going on.The king of chefville thought that he was surrounded and that he had no option but to flee.It seemed that he only had a limited amount of soldiers left as most had become victims of the war. Now to flee he must move from his own Castle to the only safe place he knows which is his childhood village. </p>
<p>
The soldiers didn't have an infinite supply of ammunition to survive outside the castle. The king decided to move between the Watchtowers the king had built until they were close enough to make it to the village, as the Watchtowers were like safe-houses where they could rest and start moving again only after the coast was clear ( though they would eventually be spotted and attacked again after they moved out of a watchtower ).</p>
<p>
The entire Realm could be considered a 2-d plane. Where the Castle,Watchtowers and the village are specific points. The ammunition required to move a distance X in the realm was X<sup>2</sup> units. You are to find the smallest amount of ammunition required by the soldiers when starting from the castle to get the king safely to the village.</p>
<p>
Note the Castle is always considered to be at (0,0). And the distance between any two points (x1,y1) and (x2,y2) is sqrt((x1-x2)<sup>2</sup> + (y1-y2)<sup>2</sup>).</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains a single line containing N(0&lt;=N&lt;=1000) the number of Watchtowers. The next N lines contain two integers each. The ith line contains the X-coordinate and Y-coordinate of the ith Watchtower. The Last line contains the coordinates of the village.All the coordinates will be between -1000 and 1000.</p>
<h3>Output</h3>
<p>
Output a single line with the amount of ammunition to begin with needed to get to the village.</p>
<h3>Example</h3>
<pre><b>Input:</b>

3
-1 -3
-2 -5
-23 -192
1 1

<b>Output:</b>
2

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/amitrc17">amitrc17</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-01-2014</td>
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