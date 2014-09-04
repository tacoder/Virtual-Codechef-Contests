<?php require("../../includes/header.php"); ?><h1>MOUNTAIN WALKING</h1><div class="content">

<p>
In this problem your task is to program a robot that will output some data about a terrain after traversing it. Input will be in the form a 2D picture containing only 4 types of characters :- </p>
<p><li> '/' :  Forward slash, indicating ascent
</li>
<li> '\' :  Backward slash, indicating descent
</li>
<li> '_' :  Underscore, denoting horizontal plane
<p>
Additionally there will be only SPACE (Ascii value = 32) charecters. ( Refer the below figure).</p>
<p>
The robot starts its journey at bottom left corner of the terrain and after traversing stops at the bottom right corner. Also note that the robot will always start and end at the SAME LEVEL.</p>
<p>
Given the picture as input you will have to output 2 things. The "Total Walk Distance" i.e, the total length of the path and the type of steps taken to complete the Journey. For the sake of simplification we will assume that each charecter('/' , '\' &amp; '_') has length = 1.</p>
<p>
Now Consider the following example:</p>
<pre>
<code>
   _
  / \/\
 /     \
/       \
</code>
</pre>

</li></p><p>
The robot starts at the bottom left corner and takes the following path:<br /><br />
<li>	Ascends 3 steps<br />
</li><li>	Moves forward by 1 step<br />
</li><li>	Descends 1 step<br />
</li><li>	Ascends 1 step<br />
</li><li>	Descends 3 steps<br /><br />
and robot ends it journey at bottom right corner (At the same level). The Total Walk Distance = 9.<br />


<h3>Input</h3>
<p>First line of input will be an integer N (N&lt;20). The next line will be an empty. Then exactly N lines follow describing the terrain.<br />
You can assume the following for the input (terrain).<br /><br />
<li> Input will contain only four types of characters (" ","_","/","\").<br />
</li><li> The terrain will start and end at the same level.<br />
</li><li> Each line is guarenteed to have atleast one non white space charecter.<br />
</li><li> Maximum width of any line wont be larger than 200.<br />
</li><li> There will be no trailing white spaces.<br /><br />


<h3>Output</h3>
<p>First line of output should be the Total Walk Distance followed by the description the the the terrain.
Each line must be ONE of the following<br /><br />

<li> Up xx steps<br />
</li><li> Down xx steps<br />
</li><li> Walk xx steps<br /><br />

Where xx is an integer.<br />
Refer Examples for exact specification.<br />

<h3>Example</h3>

<pre>
<b>Input:</b>
<code>
3

  /\
 /  \
/    \
</code>
<b>Output:</b>
Total Walk Distance = 6
Up 3 steps
Down steps

</pre>

<pre>
<b>Input:</b>
<code>
2

 _____  ___
/     \/   \
</code>
<b>Output:</b>
Total Walk Distance = 12
Up 1 steps
Walk 5 steps
Down 1 steps
Up 1 steps
Walk 3 steps
Down 1 steps

</pre>

<pre>
<b>Input:</b>
<code>
5

        _
   /\__/ \
  /       \
 /         \/\_
/              \
</code>
<b>Output:</b>
Total Walk Distance = 16
Up 4 steps
Down 1 steps
Walk 2 steps
Up 1 steps
Walk 1 steps
Down 3 steps
Up 1 steps
Down 1 steps
Walk 1 steps
Down 1 steps

</pre></li></p></li></p></li></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abhijith">abhijith</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-01-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>