<?php require("../../includes/header.php"); ?><h1>JUNKYARD</h1><div class="content">
<h3>Problem description:</h3>
<p><br />
</p><p>Junkyard challenges a participant’s skill to ingeniously utilize the provided junk and transform it into a mechanically feasible and innovative contraption. The element of time constraint tests the fortitude and creativity in the participant. In addition to this, there are some area constraints too, which will test you. Area of N units means total area is (N+5)*(N-1).  There is a limit L which is maximum area available to a participant. You will be given L. You have to tell the maximum number of units of Area possible.<br /><br /><br />
<b>Note</b>: N can take integral values only.<br />
 </p>
<h3>Input</h3>
<p>There is a single positive integer T on the first line of input. It stands for the number of cases to follow. Each case consists of single line having the value of L.</p>
<h3>Output</h3>
<p>Output consists of T lines, each line has an integer representing the maximum units of Area possible for given L. Output -1 if total area comes out to be 0 for possible units.</p>
<h3>Constraints</h3>
<p>1&lt;=T&lt;=10^6<br />
<br />1&lt;=L&lt;=10^18
</p>
<h3>Example</h3>
<pre><b>Input:</b>
5
15
16
26
30
150

<b>Output:</b>
2
3
3
4
10
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/behalgitanshu">behalgitanshu</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-01-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>