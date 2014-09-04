<?php require("../../includes/header.php"); ?><h1>The Enchanted Glasses</h1><div class="content">

<p>
One day while roaming the lands of Greece, Rubixius came across a strange arrangement of glasses. He saw <b>N</b> glasses kept randomly with a cloud hovering over a glass n<sub>i</sub> for a certain period of time pouring 1 drop of rain per second. After the time was up it would go to another glass and start dripping water in that glass. <br/><br/><br />
The strange thing about these glasses was that, if at any time a glass was filled to the brim it would spill into the next glass and the last glass would spill into the First glass. The thing that he found stranger was that each glass could only hold up to c<sub>i</sub> drops of overflow water after which the overflow water would vanish if the glass was not full.<br/><br/><br />
Help Rubixius figure out how many drops of water all the glasses hold after time T.</br/></br/></br/></br/></p>
<h3>Input</h3>
<p> The input starts with an integer S specifying the number of test cases. Each case will start with N and T which will specify the number of glasses and the total time respectively. The next line will contain the capacity n<sub>i</sub> of each glass. The following line will have the overflow limit c<sub>i</sub> for each glass. The last line of the case will have pairs of integers which will be in the form - g<sub>i</sub> t<sub>i</sub> - indicating the glass over which the cloud is hovering and for the period which it hovers. The input for each case is such that the total of all the time periods indicated on the last line of the test case will equal the total time <b>T</b>.<br/><br/><br />
<b>Constraints</b><br/><br />
0&lt;N&lt;50<br/><br />
0&lt;N&lt;10000<br/><br />
0&lt;T&lt;100000000<br/></br/></br/></br/></br/></br/></br/></p>
<h3>Output</h3>
<p>Output a single line for each case containing the maximum drops that are accumulated after time T.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5 8
1 1 1 1 1
1 1 1 1 1
0 8
5 8
2 1 1 1 1
1 1 1 1 1
0 8

<b>Output:</b>
5
6

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/virai">virai</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-02-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>