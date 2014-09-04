<?php require("../../includes/header.php"); ?><h1>Synapse Training Excercises</h1><div class="content">

<p><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><br />
<html><br />
<head><br />
<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" /></head></html></!doctype></p>
<p><title>The Bridges of San Mochti</title><br />
<meta name="author" content="Eric Shade" /><br />
<br />
<body style="background-color: white;" lang="EN-US"></body></p>
<h1 style="text-align: center;" align="center"></h1>
<p>Clowns before joining Synapse have to undergo a series of traing excercises.   One of the training exercises is to cross a series of rope<br />
bridges set high in the trees.  Every bridge has a maximum capacity,<br />
which is the number of people that the bridge can support without<br />
breaking.  The goal is to cross the bridges as quickly as possible,<br />
subject to the following tactical requirements:</p>
<dl>
<dt><i>One unit at a time!</i></dt>
<dd>If two or more people can cross a bridge at the same time (because<br />
they do not exceed the capacity), they do so as a unit; they walk as<br />
close together as possible, and they all take a step at the same time.<br />
It is never acceptable to have two different units on the same bridge<br />
at the same time, even if they don't exceed the capacity.  Having<br />
multiple units on a bridge is not tactically sound, and multiple units<br />
can cause oscillations in the rope that slow everyone down.  This rule<br />
applies even if a unit contains only a single person.</dd>
<dt><i>Keep moving!</i></dt>
<dd>When a bridge is free, as many people as possible begin to cross<br />
it as a unit.  Note that this strategy doesn't always lead to an<br />
optimal overall crossing time (it may be faster for a group to wait<br />
for people behind them to catch up so that more people can cross at<br />
once).  But it is not tactically sound for a group to wait, because<br />
the people they're waiting for might not make it, and then they've not<br />
only wasted time but endangered themselves as well.</dd>
</dl>
<p>Periodically the bridges are reconfigured to give the trainees a<br />
different challenge.  Given a bridge configuration, your job is to<br />
calculate the minimum amount of time it would take a group of people<br />
to cross all the bridges subject to these requirements.</p>
<p>For example, suppose you have nine people who must cross two<br />
bridges: the first has capacity 3 and takes 10 seconds to cross; the<br />
second has capacity 4 and takes 60 seconds to cross.  The initial<br />
state can be represented as (9&nbsp;0&nbsp;0), meaning that 9 people<br />
are waiting to cross the first bridge, no one is waiting to cross the<br />
second bridge, and no one has crossed the last bridge.  At 10 seconds<br />
the state is (6&nbsp;3&nbsp;0).  At 20 seconds the state is<br />
(3&nbsp;3&nbsp;/3:50/&nbsp;0), where /3:50/ means that a unit of three<br />
people is crossing the second bridge and has 50 seconds left.  At 30<br />
seconds the state is (0&nbsp;6&nbsp;/3:40/&nbsp;0); at 70 seconds it's<br />
(0&nbsp;6&nbsp;3); at 130 seconds it's (0&nbsp;2&nbsp;7); and at 190<br />
seconds it's (0&nbsp;0&nbsp;9).  Thus the total minimum time is 190<br />
seconds.</p>
<p><b>Input:</b> The input consists of one or more bridge<br />
configurations, followed by a line containing two zeros that signals<br />
the end of the input.  Each bridge configuration begins with a line<br />
containing a negative integer &ndash;B and a positive integer P, where<br />
B is the number of bridges and P is the total number of people that<br />
must cross the bridges.  Both B and P will be at most 20.  (The reason<br />
for putting &ndash;B in the input file is to make the first line of a<br />
configuration stand out from the remaining lines.)  Following are B<br />
lines, one for each bridge, listed in order from the first bridge that<br />
must be crossed to the last.  Each bridge is defined by two positive<br />
integers C and T, where C is the capacity of the bridge (the maximum<br />
number of people the bridge can hold), and T is the time it takes to<br />
cross the bridge (in seconds).  C will be at most 5, and T will be at<br />
most 100.  Only one unit, of size at most C, can cross a bridge at a<br />
time; the time required is always T, regardless of the size of the<br />
unit (since they all move as one).  The end of one bridge is always<br />
close to the beginning of the next, so the travel time between bridges<br />
is zero.</p>
<p><b>Output:</b> For each bridge configuration, output one line<br />
containing the minimum amount of time it will take (in seconds) for<br />
all of the people to cross all of the bridges while meeting both<br />
tactical requirements.</p>
<p>Example Input</p>
<p>
-1 2<br /><br />
5 17<br /><br />
-1 8<br /><br />
3 25<br /><br />
-2 9<br /><br />
3 10<br /><br />
4 60<br /><br />
-3 10<br /><br />
2 10<br /><br />
3 30<br /><br />
2 15<br /><br />
-4 8<br /><br />
1 8<br /><br />
4 30<br /><br />
2 10<br /><br />
1 12<br /><br />
0 0 <br />
</p>
<p>Example Output</p>
<p>
17<br /><br />
75<br /><br />
190<br /><br />
145<br /><br />
162 <br />
</p>
<p></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/wizgen">wizgen</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-02-2012</td>
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